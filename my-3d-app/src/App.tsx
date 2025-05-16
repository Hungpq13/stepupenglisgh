import { ShaderGradientCanvas, ShaderGradient } from '@shadergradient/react';

function App() {
  return (
    <div style={{ width: '100vw', height: '100vh' }}>
     <ShaderGradientCanvas
  style={{
    width: '100%',
    height: '100%',
  }}
  lazyLoad={false}

  fov={undefined}
  pixelDensity={1}
  pointerEvents="none"
>
  <ShaderGradient
    animate="on"
    type="waterPlane"
    wireframe={false}
    shader="defaults"
    uTime={0}
    uSpeed={0.2}
    uStrength={3.4}
    uDensity={1.2}
    uFrequency={0}
    uAmplitude={0}
    positionX={0}
    positionY={0.9}
    positionZ={-0.3}
    rotationX={45}
    rotationY={0}
    rotationZ={0}
    color1="#ffcdf3"
    color2="#b4f6fb"
    color3="#f2f2f2"
    reflection={0.1}

    // View (camera) props
    cAzimuthAngle={170}
    cPolarAngle={70}
    cDistance={4.4}
    cameraZoom={1}

    // Effect props
    lightType="3d"
    brightness={1.2}
    envPreset="city"
    grain="off"

    // Tool props
    toggleAxis={false}
    zoomOut={false}
    hoverState=""

    // Optional - if using transition features
    enableTransition={false}
  />
</ShaderGradientCanvas>
    </div>
  );
}

export default App;
